-- 同じカラムに貼ってる別インデックスより何故かCardinalityが低かったので削除
ALTER TABLE comments DROP INDEX entry_id;
