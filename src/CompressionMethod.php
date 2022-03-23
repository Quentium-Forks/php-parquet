<?php
namespace codename\parquet;

class CompressionMethod
{
  public const None = 0;
  public const Snappy = 1;
  public const Gzip = 2;
  public const Lzo = 3;
  public const Brotli = 4;
  public const Lz4 = 5;
  public const Zstd = 6;
  public const Lz4_raw = 7;
}
